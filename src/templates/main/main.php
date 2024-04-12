<?php include __DIR__ . '/../header.php' ?>

<div class="content">
    <div class="contact-list">
        <div class="scroll-area">
            <form class="contact-element" action="">
                <div class="contact-image" style="background-color: #98c757">О</div>
                <div class="contact-name">Олег Елисеев</div>
                <div class="contact-number">+7 (985) 512-51-20</div>
                <input class="contact-button" type="submit" value="Удалить">
            </form>
       
            <form class="contact-element" action="">
                <div class="contact-image" style="background-color: #feb920">О</div>
                <div class="contact-name">Олег Елисеев</div>
                <div class="contact-number">+7 (985) 512-51-20</div>
                <input class="contact-button" type="submit" value="Удалить">
            </form>
       
            <form class="contact-element" action="">
                <div class="contact-image" style="background-color: #f95a20">О</div>
                <div class="contact-name">Олег Елисеев</div>
                <div class="contact-number">+7 (985) 512-51-20</div>
                <input class="contact-button" type="submit" value="Удалить">
            </form>

            <form class="contact-element" action="">
                <div class="contact-image" style="background-color: #3881d0">О</div>
                <div class="contact-name">Олег Елисеев</div>
                <div class="contact-number">+7 (985) 512-51-20</div>
                <input class="contact-button" type="submit" value="Удалить">
            </form>
        </div>
    </div>
    <div class="contact-form">
        <form action="" method="POST">
            <h3>Добавить контакт</h3>
            <div class="contact-form-inputs">
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="+7 (999) 999-99-99">
            </div>
            <div class="contact-form-radio-colors">
                <input class="radio-button" type="radio" name="radio-color" value="blue" id="red" checked="checked">
                <label class="radio-button-label" for="red"><span class="radio-button-red"></span></label>

                <input class="radio-button" type="radio" name="radio-color" value="orange" id="orange">
                <label class="radio-button-label" for="orange"><span class="radio-button-orange"></span></label>

                <input class="radio-button" type="radio" name="radio-color" value="yellow" id="yellow">
                <label class="radio-button-label" for="yellow"><span class="radio-button-yellow"></span></label>

                <input class="radio-button" type="radio" name="radio-color" value="green" id="green">
                <label class="radio-button-label" for="green"><span class="radio-button-green"></span></label>

                <input class="radio-button" type="radio" name="radio-color" value="blue" id="blue">
                <label class="radio-button-label" for="blue"><span class="radio-button-blue"></span></label>

                <input class="radio-button" type="radio" name="radio-color" value="pink" id="pink">
                <label class="radio-button-label" for="pink"><span class="radio-button-pink"></span></label>
            </div>
            <input class="submit-button" type="submit" value="Добавить">
        </form>
    </div>
</div>

<?php include __DIR__ . '/../footer.php' ?>