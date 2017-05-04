//Текущее развернутое окно
        var expandedWnd;
        //Смещение курсора мыши относительно левого верхнего угла окна в момент начала его перемещения 
        var offsetX;
        var offsetY; 

        function OnClick(wnd){
         if (wnd.className=='window')
            Expand(wnd);
         else
            Collapse(wnd);
        }  
       
        function Expand(wnd)
        {
          //Если какое-то окно развернуто, то сворачиваем его
          if (expandedWnd!=null)
              Collapse();
          
          //Меняем стиль окна и картинку-кнопку сверху-справа
          wnd.className = 'window-expanded';  
          wnd.getElementsByClassName('window-head')[0].getElementsByTagName('img')[0].src='collapse.png';       
          
          //Попытка установить координаты-результат последнего перемещения данного окна
          var left = parseInt(wnd['left-pos']);
          if (!isNaN(left))
              wnd.style.left = left+'px';           

          var top = parseInt(wnd['top-pos']);
          if (!isNaN(top))
              wnd.style.top = top+'px';           
 
          //Сохраняем ссылку на текущее развернутое окно 
          expandedWnd=wnd;
        }  

        function Collapse()
        {
          if (expandedWnd==null)
              return;

          //Устанавливаем координаты по-умолчанию 
          expandedWnd.style.left = '';
          expandedWnd.style.top = '';
         
          //Меняем стиль окна и картинку-кнопку сверху-справа
          expandedWnd.className = 'window';  
          expandedWnd.getElementsByClassName('window-head')[0].getElementsByTagName('img')[0].src='expand.png';          

          //Обнуляем ссылку на текущее развернутое окно 
          expandedWnd=null; 
        }

        function StartMove(event) 
        {
         //Кроссбраузерное получение ссылки на событие и объект - источник события (заголовок окна)
         event = event || window.event;
         var header=event.target || event.srcElement;
         //Получаем ссылку на само окно
         var wnd=header.parentNode;

         //Если окно не является текущим развернутым, то выходим из функции 
         if (wnd!=expandedWnd)
             return;

         //На время перемещения окна запрещаем документу обработку мыши по умолчанию, что позволяет
         //запретить выделение текста мышью.
         document.onmousedown = function(event) {return false;}

         //Кроссбраузерное получение координат мыши  
         var x = event.pageX || event.x;
         var y = event.pageY || event.y;

         //Получение координат текущего окна
         var rect = wnd.getBoundingClientRect();
         //Вычисление смещения курсора мыши относительно левого верхнего угла окна
         offsetX = x-rect.left;
         offsetY = y-rect.top;

         //Присваиваем обработчик события перемещения мыши 
         document.onmousemove = function(event) 
                  {       
                   //Кроссбраузерное получение ссылки на событие
                   event = event || window.event;

                   //Кроссбраузерное получение координат мыши  
                   var x = event.pageX || event.x;
                   var y = event.pageY || event.y;

                   //Вычисление новых координат окна
                   x=x-offsetX;
                   y=y-offsetY;  

                   //Присвоение новых координат окна 
                   expandedWnd.style.left = x+'px';
                   expandedWnd.style.top = y+'px';

                   //Сохранение координат для возможности установки по ним окна в процессе следующего раскрытия
                   expandedWnd['left-pos'] = x;
                   expandedWnd['top-pos'] = y;
                  }
 
         //Присваиваем обработчик события, когда кнопка мыши будет отпущена
         //(восстанавливаем обработчики событий по умолчанию) 
         document.onmouseup = function() {document.onmousemove = null; document.onmousedown = null;};
        }       