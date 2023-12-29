const movies = [{
    img: "img/m5.jpg",
    title: "Avatar: The Way of Water",
    year: 2022,
    url: "moviepageAvatar.php",
  },
  {
    img: "img/m1.png",
    title: "Puss in Boots",
    year: 2022,
    url: "moviepagePuss.php",
  },
  {
    img: "img/m2.jpg",
    title: "Jurassic World",
    year: 2015,
    url: "moviepageJurassic.php",
  },
  {
    img: "img/m3.jpg",
    title: "Logan",
    year: 2017,
    url: "moviepageLogan.php",
  },
  {
    img: "img/m4.jpg",
    title: "Avengers: Infinity War",
    year: 2018,
    url: "moviepageAvenger.php",
  },
  {
    img: "img/m6.jpg",
    title: "Spider-Man: Far from Home",
    year: 2019,
    url: "moviepageSpider.php",
  },
  {
    img: "img/m7.jpg",
    title: "Jujutsu Kaisen 0",
    year: 2021,
    url: "moviepageJJK.php",
  },
  {
    img: "img/m8.jpg",
    title: "Call Me by Your Name",
    year: 2017,
    url: "moviepageCall.php",
  },
  {
    img: "img/m9.jpg",
    title: "SMILE",
    year: 2022,
    url: "moviepageSmile.php",
  },
  {
    img: "img/m10.jpg",
    title: "Interstellar",
    year: 2014,
    url: "moviepageInter.php",
  },
  
  ]
  
  let search_bx2 = document.getElementsByClassName('search_bx2')[0];
  
  window.addEventListener('load', () => {
    movies.forEach(element => {
        const { img, title, year, url } = element;
  
        let card = document.createElement('a');
        card.href = url;
        card.innerHTML = ` <img src="${img}" alt="">
        <div class="content2">
            <h6>${title}</h6>
            <p>${year}</p>
        </div>`;
        search_bx2.appendChild(card);
    });
  });
  
  search.addEventListener('keyup', () => {
    let filter = search.value.toUpperCase();
    let a = search_bx2.getElementsByTagName('a');
    for (let i = 0; i < a.length; i++) {
        let b = a[i].getElementsByClassName('content2')[0];
        let c = b.getElementsByTagName('h6')[0];
  
        let TextValue = c.textContent || c.innerText;
        if (TextValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = '';
            search_bx2.style.visibility = "visible";
            search_bx2.style.opacity = 1;
        } else {
            a[i].style.display = 'none';
        }
        if (search.value == 0) {
            search_bx2.style.visibility = "hidden";
            search_bx2.style.opacity = 0;
        }
    }
  })