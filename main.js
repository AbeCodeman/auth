'use strict';
let form = document.querySelector("form");
let button = document.querySelector("#but");
button.addEventListener("click", (event) => {
    let name = document.querySelector("#name").value;
    let surname = document.querySelector("#surname").value;
    let email = document.querySelector("[name=email]").value;
    let city = document.querySelector("#city").value;
    let number = document.querySelector("#number").value;
    let edu = document.querySelector("#edu").value;
    let tall = document.querySelector("#tall").value;
    let weight = document.querySelector("#weight").value;
    let sex = document.querySelector("[name=sex]").value;
    let job = document.querySelector("#job").value;
    if (/[[A-z][a-z][А-ЯЁ][а-яё]]/.test(name)) {
        alert("имя должно состоять из букв!");
        event.preventDefault();
    } else if (/[[A-z][a-z][А-ЯЁ][а-яё]]/.test(surname)) {
        alert("фамилия должна состоять из букв!");
        event.preventDefault();
    } else if (!(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email))) {
        window.alert("введите корректный адрес в виде \"имя@хост.домен\"");
        event.preventDefault();
    } else if (/[^[a-z][A-Z][А-ЯЁ][а-яё]\-]/.test(city)) {
        window.alert("вы неверно указали имя города");
        event.preventDefault();
    } else if (!(/\+\d{6,17}/.test(number))) {
        window.alert("вы неверно указали номер");
        event.preventDefault();
    } else if (tall <= 110 || tall >= 200) {
        window.alert("ваш рост не подходит нам(нужен в пределе 111-199 см");
        event.preventDefault();
    } else if (weight > 109) {
        alert("лимит веса наших сотрудников - 110 кг");
        event.preventDefault();
    }
    return true;
});