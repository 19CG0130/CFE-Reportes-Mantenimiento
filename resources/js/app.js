import "./bootstrap";

import Alpine from "alpinejs";
import "flowbite";
import { Datepicker } from "flowbite-datepicker";

// Datepicker traducido
(function () {
    Datepicker.locales.es = {
        days: [
            "Domingo",
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves",
            "Viernes",
            "Sábado",
        ],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        months: [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre",
        ],
        monthsShort: [
            "Ene",
            "Feb",
            "Mar",
            "Abr",
            "May",
            "Jun",
            "Jul",
            "Ago",
            "Sep",
            "Oct",
            "Nov",
            "Dic",
        ],
        today: "Hoy",
        monthsTitle: "Meses",
        clear: "Borrar",
        weekStart: 1,
        format: "dd/mm/yyyy",
    };
})();

document.addEventListener("DOMContentLoaded", function () {
    const datepickerEl = document.getElementById("datepicker-autohide");
    const options = {
        language: "es",
        autohide: true,
    };
    new Datepicker(datepickerEl, options);
});

window.Alpine = Alpine;

Alpine.start();
