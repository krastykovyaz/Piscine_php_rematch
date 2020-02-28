var ft_list;

$(document).ready(function(){
    $('#new').click(function newTodo(){
        var todo = prompt("What should you do ?", '');
        if (todo !== '') {
            aj('insert.php?todo=' + todo, "GET", null, loadTodo);
        }
    });
    $('#ft_list div').click(function deleteTodo(){
        if (confirm("to delete this task ?")){
            aj('delete.php?id=' + $(this).data('id'), "GET", null, loadTodo);
        }
    });
    ft_list = $('#ft_list');
    loadTodo();
});

function loadTodo(){
    ft_list.empty();
    aj('select.php', "GET", null, function(data){
        data = jQuery.parseJSON(data);
        jQuery.each(data, function(i, val) {
            ft_list.prepend($('<div data-id="' + i + '">' + val + '</div>').click(function deleteTodo(){
                if (confirm("to delete this task ?")){
                    aj('delete.php?id=' + $(this).data('id'), "GET", null, loadTodo);
                }
            }));
        });
    });
}

function aj(url, method, data, success) {
    $.ajax({
            method: method,
            url: url,
            data: data
        })
        .done(function (data) {
            success(data);
        })
        .error(function (msg) {
            alert("error ajax : " + msg);
        });
}