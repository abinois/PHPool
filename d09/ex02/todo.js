var bouton = document.getElementById("new");
bouton.addEventListener("click", ft_Add);
function ft_Add()
{
    var tache = prompt("Ajouter une tache");
    if (tache)
    {
        console.log(tache);
        var todo = document.createElement("div");
        todo.setAttribute("class", "todo");
        todo.setAttribute("title", "click to delete the task");
        todo.innerHTML = tache;
        var grosse_list = document.getElementById("ft_list");
        grosse_list.insertBefore(todo, grosse_list.firstChild);
        todo.addEventListener("click", ft_Del);

    }
}
function ft_Del()
{
    if (confirm("Ceci à l'air urgent, êtes-vous sûr?"))
        this.remove();
}