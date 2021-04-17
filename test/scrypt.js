menu.onclick = function myFunction(){
    var x = document.getElementById('myTopnav');
if(x.className==="topnav"){
    x.className += " responsive";
    } else {
        x.className="topnav"; 
    }

}

let app = function() {

    const activeSizeColor = 'rgb(0, 124, 238)';
    const state = {
      activeSizeId: null,
      activeColorIds: [],
    };
    var clr;
    // выбор размера
    function clickSize(event) {
        // находим id цвета
       
        const id = event.target ? event.target.getAttribute('id') : event;
        // сохраняем id выбранного цвета
        state.activeSizeId = id;
        // перебираем детей общего контейнера, где лежат размеры
        console.log('СОСИ', document.getElementById('sizes').childNodes)
        document.getElementById('sizes').childNodes.forEach(el => {
            // находим детей с размерами
            if (el.nodeName === 'LI') {
                console.log('ID', el.id)
                // берем ребенка
                const element = document.getElementById(el.id);
              
                // смотрим совпадает ли id выбранного элемента с id ребенка
                if (el.id === state.activeSizeId) {
                    // смотрим цвет ребенка: если был активный - выключаем
                    if (element.style.color === activeSizeColor) {
                        state.activeSizeId = null;
                        element.className = '';
                        element.style.color = 'black';
                    } else {
                        // иначе мы выбрали новый размер и делаем его активным
                        element.className = 'active-size';
                        element.style.color = activeSizeColor;
                    }
                } else {
                    console.log('element', element)
                    // выключаем остальных детей
                    element.className = '';
                    element.style.color = 'black';
                }
            }
        })
    }

    // выбор цвета
    function clickColor(event) {

        
       
        // Определяем идентификатор родительского элемента
        const id = event.target ? event.target.getAttribute('id') !== null ? event.target.getAttribute('id') : event.target.parentElement.getAttribute('id') : event;
        // находим ребенка родителя: который в верстке имеет style="display: none"
        const child = document.getElementById(id).childNodes[0];
        // смотрим активный ребенок или нет
      
        if (child.style.display === 'block') {
            // если был активным, то выключаем его и удаляем из массива активных цветов
            child.style.display = 'none';
            const idSavedColor = state.activeColorIds.indexOf(id);
            state.activeColorIds.splice(idSavedColor, 1);
        } else {
            
            // делаем ребенка активным и добавляем в массив активных цветов
            state.activeColorIds.push(id);
            child.style.display = 'block';
        }
    }

    // ВЫБОР ТОВАРА

   
    var ul = document.getElementById('thumbnailss');

    ul.addEventListener('click', check);
    
    function check(e){
        var target = e.target;
        
        while (target && target.parentNode !== ul) { // If the clicked element
            target = target.parentNode;              // isn't a direct child.
        }
        if(target){
            
           //alert(target.id);
           //console.log(target.id);
           
          
        //   console.log(myProd[target.id-1]);
          
           document.getElementById("textTitle").innerHTML=myProd[target.id-1].name;
           document.getElementById("myPrice").innerHTML=myProd[target.id-1].price;
           document.getElementById("myPrDis").innerHTML= ((Number(myProd[target.id-1].price)/66)*100).toFixed(2);

           clickSize(myProd[target.id-1].size);
          
           clickColor(myProd[target.id-1].color);





           
        }
    }

    return {
        clickSize: clickSize,
        clickColor: clickColor,
    }
}();

window['app'] = app;
