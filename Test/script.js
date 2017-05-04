function JSWindow(title, oContent, x, y) {
        


// save arguments
this.title = title;
this.oContent = oContent;

// initialization
this.mx = 0;
this.my = 0;

// create table for window with title-bar and content
this.oTable = document.createElement("table");
this.oTable.border = 1;

// set the position of the window
this.oTable.style.position = "absolute";
this.oTable.style.left = x + "px";
this.oTable.style.top = y + "px";

// set background to white (default is transparent)
this.oTable.style.backgroundColor = "white";

// link from the table to the JSWindow object
this.oTable.jsWindow = this;

// if anywhere in the table are is clicked, bring the window to front.
this.oTable.onmousedown = JSWindow.prototype.onBringToFront;

// append to document body
document.body.appendChild(this.oTable);

// add row for title bar
var oTR = this.oTable.insertRow(0);
oTR.className = "JSWindowTitleStyle";

// title
var oTD = oTR.insertCell(0);
oTD.innerHTML = title;
oTD.jsWindow = this;
oTD.onmousedown = JSWindow.prototype.tdOnMouseDown;

// minimize
this.oMinTD = oTR.insertCell(1);
this.oMinTD.innerHTML = "_";
this.oMinTD.onclick = JSWindow.prototype.onMinimize;
this.oMinTD.jsWindow = this;

// close
oTD = oTR.insertCell(2);
oTD.innerHTML = "X";
oTD.jsWindow = this;
oTD.onmousedown = JSWindow.prototype.onBringToFront;
oTD.onclick = JSWindow.prototype.onClose;

// add row for window content
// a single cell the same width as the title bar row
oTR = this.oTable.insertRow(1);
oTD = oTR.insertCell(0);
oTD.colSpan = 3;
oTD.appendChild(oContent);
}

 JSWindow.prototype.onBringToFront = function()
{
        this.jsWindow.bringToFront();
    }
JSWindow.prototype.bringToFront = function()
{
        // move table to bottom of document body
document.body.appendChild(this.oTable);
}


JSWindow("Title","gddhdtyjftj", 400, 70);