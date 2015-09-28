$('#search').keyup(function() {

    searchText = $(this).val();

    $.ajax({
        type: "POST",
        url: "/search",
        dataType: "json",
        data: {live: true, searchText : searchText},
        success : function(data) {
            var html="<ul>";
            $.each(data, function(index, value){
                html+=("<li><a href='/clothes/" + data[index].id + "'>" + data[index].name + "</a></li>");
            })
            html+='</ul>';
           $('#update').html(html);
        }
    });
});

$('#search').submit(function() {

    searchText = $(this).val();

    $.ajax({
        type: "POST",
        url: "/search",
        dataType: "json",
        data: {searchText : searchText},
        success : function(data)
        {
            console.log(data);
        }
    });
});
