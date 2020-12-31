<?php
    require_once "parts/header.php"
?>
<section class="container px-5 my-3">
        <div class="alert alert-dark text-center">
            заполните анкету и мы ее рассмотрим(все поля заполнять обязательно)
            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Нам нужны ваши данные для принятия решения о найме. Все просто!">
                зачем заполнять?
              </button>
        </div>
    </section>
    <section class="container py-4">
        <form action="ans.php" class="row g-3" method="POST">
            <div class="col-md-4 col-sm-6">
                <label for="name" class="form-label">Ваше имя</label>
                <input type="text" class="form-control" id="name" placeholder="Аманда" required name="name">
            </div>
            <div class="col-md-4 col-sm-6">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="surname" placeholder="Белозубова" required name="surname">
            </div>
            <div class="col-md-4 col-sm-12">
                <label for="email" class="form-label">почтовый емайл</label>
                <input type="email" class="form-control" required placeholder="holyface@gmail.com" name="email">
            </div>
            <div class="col-md-4 col-sm-12">
                <label for="city" class="form-label">ваш город</label>
                <input type="text" class="form-control" id="city" placeholder="орел" required name="city">
            </div>
            <div class="col-md-8 col-sm-12">
                <label for="number" class="form-label">ваш номер телефона</label>
                <input type="tel" class="form-control" id="number" placeholder="+9554568745" required name="number">
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="edu">Образование</label>
                <select name="edu" id="edu" class="form-control" required>
                    <option value="middle">среднее</option>
                    <option value="high">высшее</option>
                    <option value="non">неоконченное</option>
                </select>
            </div>
            <div class="col-12">
                <label for="tall" class="form-label">ваш рост</label>
                <input type="number" class="form-control" required id="tall" name="tall" value="0">
            </div>
            <div class="col-12">
                <label for="weight" class="form-label">ваш вес</label>
                <input type="number" class="form-control" required placeholder="55" id="weight" name="weight">
            </div>
            <hr>
            <div class="col-sm-12 col-md-12 text-center">
                ваш гендер<br>
                <label class="form-check-label">Мужчина
                <input type="radio" class="form-check-input"  checked name="sex" id="" value="M">
                </label>
                <label class="form-check-label">Женщина
                <input type="radio" class="form-check-input" name="sex" id="" value="W">
            </label>
            </div>
            <div class="col-sm-12 col-md-12 text-center px-4">
                <p class="text-warning text-center">
                    <label for="job">На какую должность претендуете?</label>
                </p>
                <br>
                <select name="job" id="job" class="form-control">
                    <option value="cashier">кассир</option>
                    <option value="cooker">повар</option>
                    <option value="cleaner">уборщик</option>
                    <option value="storager">грузчик</option>
                    <option value="repair">ремонтник</option>
                </select>
            </div>
            <div class="text-center">
                <button type="sumbit" name="send" class="btn btn-dark" id="but">
                    отправить
                </button>
            </div>
        </form>
    </section>
<?php 
require_once "parts/footer.php";
?>