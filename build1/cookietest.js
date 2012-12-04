function setCookie(c_name,value)
{
//var exdate=new Date();
//exdate.setDate(exdate.getDate() + exdays);
//var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());

document.cookie=c_name + "=" + c_value;
}

function myFunction(name,job)
{
alert("Welcome " + name + ", the " + job);
}

