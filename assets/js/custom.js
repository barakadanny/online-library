const container = document.querySelector('.rating');
const items = document.querySelectorAll('.rating-item');
// const dtBasicExample = document.querySelector('#dtBasicExample')
const divparent = document.querySelector('.pagination-list')
const next = document.querySelector('.next')

$(function () {

        $(window).on('scroll', function() {
            if($(window).scrollTop() > 10 ) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });

});

// // rating section
// container.onclick = e =>{
//     const elClass = e.target.classList;
//     if(!elClass.contains('active')){
//         items.forEach(
//             item => item.classList.remove('active')
//         )
        
//         console.log(e.target.getAttribute("data-rate"));
//         elClass.add('active')
//     }
// }

// filter for the table
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }

//   table pagination actions
let tbody = document.querySelector('.tbody')
let tr = tbody.getElementsByTagName('tr')
let select = document.querySelector('select')
let ul = document.querySelector('.pagination-section')

let arrayTr = [];
for(let i=0; i<tr.length; i++){
    arrayTr.push(tr[i]);
}
select.onchange = rowCount;
function rowCount(e){
    let neil=ul.querySelectorAll('.list');
    neil.forEach(n=>n.remove());
    let limit = parseInt(e.target.value);
    displayPage(limit)
}

function displayPage(limit){
    tbody.innerHTML='';
    for(let i=0; i<=limit; i++){
        tbody.appendChild(arrayTr[i]);
    }
    buttonGenerator(limit)
}
displayPage(5);


function buttonGenerator(limit){
    const nofTr = arrayTr.length;
    if(nofTr <= limit){
        ul.style.display = 'none';
    }else{
        ul.style.display = 'flex';
        const nofPage = Math.ceil(nofTr/limit);
        for( i=1; i<=nofPage; i++){
            let li = document.createElement('li')
            li.className = 'list';
            let a = document.createElement('a')
            a.href = '#';
            a.setAttribute('data-page', i);
            li.appendChild(a);
            a.innerText = i;
            ul.insertBefore(li, ul.next)
        }
    }
}