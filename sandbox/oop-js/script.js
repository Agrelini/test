class Person{
    constructor(name, age, photo){
        this.name = name;
        this.age = age;
        this.photo = photo;
        this.el = document.createElement('div');
        this.el.classList.add('person');
    };
    render(){
        this.el.innerHTML = `
        <div class="person-name"> ${this.name}</div>
        <div class="person-age"> ${this.age}</div>
        <div class="person-photo"> <img style="width: 100px;" src=" ${this.photo}" </img> </div>
        `;
        document.body.appendChild(this.el);

        //Стрелочная функция для того, чтобы this (this.el) был тот, который в рендере. При обычной функции он поменяется на новый.
        this.el.addEventListener('click', ()=>{
            alert('Привет ' + this.name);
        })
    };

}

let vasya = new Person('Вася', 45, 'https://bliubliu.com/media/cache/c3/76/c376d2483064932e29eba70eec71ad8e.jpg');
vasya.render();
console.log(vasya);

let petia = new Person('Петя', 29, 'https://cdn1.flamp.ru/3170ba777a864feb6ff25675500bef33_300_300.jpg');
petia.render();
