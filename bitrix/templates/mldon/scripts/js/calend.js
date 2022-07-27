    $(function() {
        $('#date').datepicker({
            range: 'single', // режим - выбор периода
            numberOfMonths: 1,
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            startDateText:'today',
            firstDay: 1,
            minDate: 'today',
            dateFormat: 'dd.mm.yy',
            onSelect: function(dateText, inst, extensionRange) {
            $('#date').val(dateText);
    }
  });
});
