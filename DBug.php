
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IMDb Suggest with jQuery Autocomplete</title>
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function(){
    $("#q").focus(); //Focus on search field
    $("#q").autocomplete({
        minLength: 0,
        delay:5,
        source: "suggest.php",
        focus: function( event, ui ) {
            $(this).val( ui.item.value );
            return false;
        },
        select: function( event, ui ) {
            $(this).val( ui.item.value );
            return false;
        }
    }).data("uiAutocomplete")._renderItem = function( ul, item ) {
        return $("<li></li>")
            .data( "item.autocomplete", item )
            .append( "<a>" + (item.img?"<img class='imdbImage' src='imdbImage.php?url=" + item.img + "' />":"") + "<span class='imdbTitle'>" + item.label + "</span>" + (item.cast?"<br /><span class='imdbCast'>" + item.cast + "</span>":"") + "<div class='clear'></div></a>" )
            .appendTo( ul );
    };
});
</script>
<style type="text/css">
.ui-menu-item .imdbTitle{
    font-size: 0.9em;
    font-weight: bold;
}
.ui-menu-item .imdbCast{
    font-size: 0.7em;
    font-style: italic;
    line-height: 110%;
    color: #666;
}
.ui-menu-item .imdbImage{
    float: left;
    margin-right: 5px;
}
.ui-menu-item .clear{
    clear: both;
}
</style>
</head>
<body>
    <form id="form" name="form" method="get" action="http://www.imdb.com/find" style="text-align:center; margin-bottom:20px;">
        Search: 
        <input name="q" id="q" type="text" size="50" />
        <input name="s" value="all" type="hidden" />
        <input name="submit" type="submit" value="Search" />
    </form>
</body>
</html>