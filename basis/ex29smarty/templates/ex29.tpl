{include file="header.tpl"}

<h1> {#title#|capitalize}</h1>
<div>Data {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}</div>


<form action="ex29.php" method="get"> 
<h3>Nowa książka</h3>
<div>Autorzy:<input type="text" name="authors" /></div>
<div>Tytuł:<input type="text" name="title" /></div>
<input type="submit" value="Zapisz"/>
</form>


<table>

{section name=b loop=$books}
{if $smarty.section.b.index is odd by 1}
   <tr class="odd">
    <td>
     {$books[b].title}
    </td>
    <td>
     {$books[b].authors}
    </td>
   </tr>
{else}
   <tr class="even">
    <td>
     {$books[b].title}
    </td>
    <td>
     {$books[b].authors}
    </td>
   </tr>
{/if}
{sectionelse}
<tr><td> zbiór pusty </td></tr>
{/section}
</tables>
{include file="footer.tpl"}
