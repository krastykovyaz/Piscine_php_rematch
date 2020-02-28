var tab = [];
var i = 0;
var c;

function set_cookie()
{
    document.cookie = "qwe=" + escape("#ft_list".innerHTML);
}

function del_l(c)
{
    if (confirm("Are u sure to delete"))
    {   
        c.remove();
        set_cookie();
    }
}

function add_new()
{
  var todo = prompt(": ");
  if (todo != null)
  {
    var newitem = $('#ft_list')[0];
    var newdiv = $("<div></div>")[0];
    var textnode = document.createTextNode(todo);
    newdiv.onclick = function (){del_l(this);};
    newdiv.appendChild(textnode);
    newitem.appendChild(newdiv);
    set_cookie(); 
  }
}

function getCookies()
{
	var cookiesArray = document.cookie.split(';');
	var array = {};

	for (var x in cookiesArray)
	{
		var toto = cookiesArray[x].split("=");
        if (toto[0] == "qwe")
            break;
    }
    var newitem = $('#ft_list')[0];
    newitem.innerHTML = unescape(toto[1]);    
}




