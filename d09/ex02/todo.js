var bouton = document.getElementById("new");
bouton.addEventListener("click", ft_Add);
var index = 0;
function ft_Cookie()
{
    cookies = document.cookie;
    if (cookies)
    {
        var tab = [];
        for (i in cookies)
            tab.push(cookies[i]);
        for (n = tab.length - 1; n >= 0; n--)
        {
            grosse_list = document.getElementById("ft_list");
            grosse_list.insertBefore(tab[n], grosse_list.firstChild);
        }
    }
}
function ft_Add()
{
    var tache = prompt("Ajouter une tache");
    if (tache && tache.trim())
    {
        var todo = document.createElement("div");
        todo.setAttribute("class", "todo");
        todo.setAttribute("id", index);
        todo.setAttribute("title", "click to delete the task");
        todo.innerHTML = tache;
        var grosse_list = document.getElementById("ft_list");
        grosse_list.insertBefore(todo, grosse_list.firstChild);
        todo.addEventListener("click", ft_Del);

        var date = new Date();
        date.setTime(date.getTime() + (1000*12*60*60));
        alert(date.toUTCString());
        end = "; expires=" + date.toUTCString();
        document.cookie = index+"="+encodeURIComponent(todo)+end;
        index++;
    console.log(document.cookie);
    }
}
function ft_Del() {
    if (confirm("Ceci à l'air urgent, êtes-vous sûr de vouloir le supprimer?"))
    {
        this.remove();
        for (c in document.cookie)
            if (c == this.id)
                document.cookie = this.id + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
        console.log(document.cookie);
    }
}