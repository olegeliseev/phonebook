<div class="contact-form">
        <form action="/add" method="POST">
            <h3>Добавить контакт</h3>
            <div class="contact-form-inputs">
                <input type="text" placeholder="Имя" name="name" maxlength="50" required>
                <input id="number" type="text" placeholder="+7 (999) 999-99-99" name="number" required>
            </div>
            <div class="contact-form-radio-colors">
                <input class="radio-button" type="radio" name="color" value="blue" id="red" checked="checked">
                <label class="radio-button-label" for="red"><span class="radio-button-red"></span></label>

                <input class="radio-button" type="radio" name="color" value="orange" id="orange">
                <label class="radio-button-label" for="orange"><span class="radio-button-orange"></span></label>

                <input class="radio-button" type="radio" name="color" value="yellow" id="yellow">
                <label class="radio-button-label" for="yellow"><span class="radio-button-yellow"></span></label>

                <input class="radio-button" type="radio" name="color" value="green" id="green">
                <label class="radio-button-label" for="green"><span class="radio-button-green"></span></label>

                <input class="radio-button" type="radio" name="color" value="blue" id="blue">
                <label class="radio-button-label" for="blue"><span class="radio-button-blue"></span></label>

                <input class="radio-button" type="radio" name="color" value="pink" id="pink">
                <label class="radio-button-label" for="pink"><span class="radio-button-pink"></span></label>
            </div>
            <input class="submit-button" type="submit" value="Добавить">
        </form>
    </div>