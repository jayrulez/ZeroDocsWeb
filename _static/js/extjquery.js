$(document).ready(function() {
    
    
// if it is an empty element; remove it.
$('dl.collapsible>dd').each( function(){
    var comment = $(this);
    var insides = $.trim(comment.html());
if (insides == '') comment.remove();
console.log(insides);

});

// Load all the collapsible items collapsed
$('dl.collapsible>dt').next('dd').hide();

// Append collapsed icons for usability
$('dl.collapsible').has('dd').children('dt').append("&nbsp;&nbsp;<i class=\"fa fa-caret-right\"></i>");

//When we click on a tab
$(document).on('click', 'a.zerotab', function() {

    //Only to those tabs in this particular tabbed section
    var classList = $(this).attr('class').split(/\s+/);
    var tabClass = '';
    $.each(classList, function(index, item)
    {
        if (item != 'zerotab' && item != 'zerotabinfocus') 
        {
           //Identifying class name
           // (works on assumption there are only 3 class names)
           tabClass = item;
        }
    });
    //Make everything unselected
        //Change the tab coloring
    tabClassSelector = '.' + tabClass;
    
    $('#DEBUG').text(tabClassSelector);

    $(tabClassSelector).removeClass('zerotabinfocus').addClass('zerotab');
        //Hide all the divs
     $(tabClassSelector).each(function(index, item){
     $(GetDivID(item)).css("display", "none")});
    
    //Highlight only the selected one
    $(this).addClass('zerotabinfocus').removeClass('zerotab');
    
    // chop off the letters "link" to get div id
    $(GetDivID(this)).css("display", "block");
});

});

// When we click on a collapsible link
$('dl.collapsible>dt').on('click', function()
{
    $(this).next('dd').toggle();
    var caret = $(this).children('.fa');
    caret.toggleClass("fa-caret-down");
    caret.toggleClass("fa-caret-right");
});

function GetDivID(obj)
{
    var id = $(obj).attr('id');
        //Get Div id
    var toRemove = 'link';
    var divId = id.replace(toRemove,'');
    return '#' + divId;
}
