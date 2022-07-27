let countries = {
  'Латвия': ['Даугавпилс', 'Рига', 'Резекне'],
  'Польша': ['Даугавпилс',],
  'Литва': ['Вильнюс'],
  'ДНР': ['Донецк', 'Горловка', 'Макеевка', 'Енакиево'],
  'Россия':['Ростов','Москва','Белгород','Сочи','Геленджик'],
  'Крым':['Севастополь','Ялта','Симфирополь']

};
let standartListCountry = ['Латвия','Польша','Литва','ДНР','Россия','Крым'];


let possibleRussiaRostov = {
  'ДНР': ['Донецк', 'Горловка', 'Макеевка', 'Енакиево'],
  'Крым':['Севастополь','Ялта','Симфирополь']
};
let RussiaRostovListCountry = ['Латвия','Польша','Литва','ДНР','Крым'];
let possibleKreame = {
  'ДНР': ['Донецк', 'Горловка', 'Макеевка', 'Енакиево'],
  'Россия':['Ростов',],
};
let KreameListCountry = ['ДНР','Россия'];
const selectCountryFrom = document.querySelector('#country_from');
const optionCountryFrom = selectCountryFrom.querySelectorAll('option');
const selectCityFrom = document.querySelector('#city_from');
const optionCityFrom = selectCityFrom.querySelectorAll('option');

const selectCountryInput = document.querySelector('#country_input');
const optionCountryInput = selectCountryInput.querySelectorAll('option');
const selectCityInput = document.querySelector('#city_input');




function showListCityFrom(countryFromSelected){
  let textSelectCity = '<option value="">Выберите город</option>';
  selectCityFrom.disabled = false;

  countries[countryFromSelected].forEach(element => {
    textSelectCity += `<option value="${element}">${element}</option>`
  });
  selectCityFrom.innerHTML = textSelectCity;
}


function showListCityInput(countryInputSelected){
  let textSelectCity = '<option value="">Выберите город</option>';
  selectCityInput.disabled = false;

  countries[countryInputSelected].forEach(element => {
    textSelectCity += `<option value="${element}">${element}</option>`
  });
  selectCityInput.innerHTML = textSelectCity;
}


selectCountryFrom.addEventListener('change', (event) => {
  const countryFromSelected = event.target.value;

  if(selectCountryFrom.value === 'Крым'){
    showListCityFrom(countryFromSelected)

    selectCountryInput.innerHTML = '';
    KreameListCountry.forEach(element => {
      selectCountryInput.innerHTML += `<option value="${element}">${element}</option>`
    });
  }
  else {
    if(selectCountryFrom.value !== ''){
      showListCityFrom(countryFromSelected)
    }
    else{
      selectCityFrom.disabled = true;
    }
    selectCountryInput.innerHTML = '';
    standartListCountry.forEach(element => {
      selectCountryInput.innerHTML += `<option value="${element}">${element}</option>`
    });
  }
})



selectCityFrom.addEventListener('change', (event) => {
  const cityFromSelected = event.target.value;

  if(cityFromSelected === 'Ростов'){
    selectCountryInput.innerHTML = '';
    RussiaRostovListCountry.forEach(element => {
      selectCountryInput.innerHTML += `<option value="${element}">${element}</option>`
    });
  }
});




selectCountryInput.addEventListener('change', (event) => {
  const countryInputSelected = event.target.value;
  console.log('selectCountryFrom !=')


    if(countryInputSelected === 'Крым'){console.log(1)
      showListCityInput(countryInputSelected)
      console.log(countryInputSelected)
      selectCountryFrom.innerHTML = '';
      KreameListCountry.forEach(element => {
        selectCountryFrom.innerHTML += `<option value="${element}">${element}</option>`
      });
    }
    else {console.log('else');
      if(selectCountryInput.value !== ''){console.log('else if');
        showListCityInput(countryInputSelected)
      }
      else{console.log('else else');
        selectCityInput.disabled = true;
      }
      selectCountryFrom.innerHTML = '';
      standartListCountry.forEach(element => {
        selectCountryFrom.innerHTML += `<option value="${element}">${element}</option>`
      });
    }



})
