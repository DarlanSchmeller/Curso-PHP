<div class="title">Integração CSS</div>

<h1 center>
<?php
echo '<small>';
echo 'Olá ';
echo 'Mundo!';
echo '</small>';
?>
</h1>

<?= "<div center blue>Outra forma de me expressar!</div>"; ?>
<br>

<div center>
    <button double class="clickable">
        <?= "Legal" ?>
    </button>
</div>


<!-- [text] are attributes you can create
using css and can be assigned to any HTML element -->

<style>
    button {
        padding: 5px <?= 2 * 10?>px;
        background-color: grey;
        color: #eee;
        border-radius: 10px
    }

    .clickable {
        cursor: pointer;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [blue] {
        color: #4286f4;
    }
    [double] {
        font-size: 2rem;
    }
</style>