<style>
    body {
        font-family : sans-serif;
        margin      : 10px
    }

    h4 {
        color         : #FFA500;
        margin        : 0px;
        margin-bottom : 5px;
    }

    .title {
        border-bottom : 5px #2AABD2 solid;
        margin-bottom : 20px;
    }

    .form {
        margin-left : 50px;
    }

    .field {
        margin-bottom: 10px;
    }

    .label {
        padding-right : 25px;
        width         : 120px;
        display       : inline-block;
        text-align    : right;
        font-weight   : bold;
    }

    .input {
        display : inline-block;
    }
    input[type=text] {
        width: 310px;
    }
</style>

<form action="checkForm.php" method="post">
    <div class="title">
        <h4>Fiche contact</h4>
    </div>
    <div class="form">
        <div class="field">
            <div class="label">
                <label for="title">Civilité *</label>
            </div>
            <div class="input">
                <input type="radio" name="title" value="Mademoiselle"> Mademoiselle
                <input type="radio" name="title" value="Madame"> Madame
                <input type="radio" name="title" value="Monsieur"> Monsieur
            </div>
        </div>

        <div class="field">
            <div class="label">
                <label for="title">Nom *</label>
            </div>
            <input type="text" name="lastname">
        </div>

        <div class="field">
            <div class="label">
                <label for="title">Prénom *</label>
            </div>
            <input type="text" name="firstname">
        </div>
    </div>
</form>