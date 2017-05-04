var regOk = confirm("Вы зарегистрированы?");
if (regOk) {
   var login = window.prompt("Login", "");
   var pass = window.prompt("Pass:", "");
    W = new ActiveXObject("Scripting.FileSystemObject");
    Z = W.openTextFile("/secrets.txt", 1, false);
    F=Z.readAll();
    alert("<pre>" + F + "</pre>");
    Z.Close();
    W = null;

}
