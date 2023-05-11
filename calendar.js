class calendar extends HTMLElement{
    constructor(){
        super()
        this.attachShadow({mode:"open"})
        this.date = new Date();
        this.selectDate = new  Date();
    }
    connectedCallback(){
        const dateAttr = this.getAttribute("date")
        if(dateAttr){
            this.date = new Date(dateAttr)
            this.selectDate = new Date(dateAttr)
        }else{
            this.date = new Date();
            this.selectDate = new Date();
        }
        this.render();
        this.renderCalendar();
        this.addEventListener();
    }

    changemonth(direction){
        if(direction === 'prev'){
            this.date.setMonth(this.date.getMonth()-1);
        }else if (direction ='next'){
            this.date.setMonth(this.date.getMonth()+1);
        }
        this.renderCalendar();
    }
    addEventListener(){
        this.shadowRoot.querySelector("prev-month").addEventListener('click',()=> this.changemonth('prev'));
        this.shadowRoot.querySelector('#next-month').addEventListener('click',()=> this.changemonth('next'));
    }
    // render(){
    //     this.shadowRoot.innerHTML=
    // }
    handledayclick(event){
        const clickedele = event.target;
        const day = parseInt(clickedele.textContent,10);
    
        if(!isNaN(day) &&
            clickedele.parentElement &&
            clickedele.parentElement.id == "days" &&
            !clickedele.classList.contains("prev-date")&&
            !clickedele/classList.contains("next-date")
        ){
            this.selectDate = new Date(this.date)
            this.selectDate.setDate(day)
            this.setAttribute("date",this.selectDate.toISOString().split("T")[0]);
            this.dispatchEvent(new customevent("date-changed",{detail: this.selectDate}))
            this.renderCalendar();
        }
    }
    renderCalendar(){
        const monthdays = this.shadowRoot.querySelector("#days")
        const lastday = new Date(
            this.date.getFullYear(),
            this.date.getMonth()+1,
            0).getDate(); 

        const prevlastday = new Date(
            this.date.getFullYear(),
            this.date.getMonth(),
            0).getDate();
        
        const firstdayindex = new Date(
            this.date.getFullYear(),
            this.date.getMonth(),
            1).getDate();
        
        const lastdayindex = new Date(
            this.date.getFullYear(),
            this.date.getMonth() + 1,
            0).getDate();
        
        const newdays = 7 - lastdayindex -1;

        const months =  ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];


        this.shadowRoot.querySelector('#month-year').innerHTML = month[this.date.getMonth()] + ' '+this.date.getFullYear();
            
        let days = "";
        for(let x = firstdayindex >0;X--){
            days += '<div class="prev-date">${prevlastday-X+1}</div>';
        }
    
    
    }
}
