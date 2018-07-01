<h1>Hallo Smarty</h1>
<a href="index.php?page=news">NEWS</a>

<p>
    {foreach from=$articles item=title}
        <li>{$title}</li>
    {/foreach}

</p>
<a href="index.php?page=contact">Contact</a>

