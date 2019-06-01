import $ from 'jquery';

export default class Slide {
    constructor(){
        this.current = 0;
        this.sList = $(".slide-image"); //
        this.indiList = $(".indicator li"); //인디케이터 버튼

        this.indiList.each((idx, target) => {
            $(target).data("idx", idx);
        });

        this.sliding = false;
        
        this.indiList.on("click", (e)=>{
            let idx = $(e.target).data("idx");
            if(this.current == idx || this.sliding) return;

            this.indiList.removeClass("active");
            this.indiList.eq(idx).addClass("active");        
            
            this.sliding = true;
            if(this.current < idx ) { //오른쪽으로 이동
                this.sList.eq(idx).css({"left":"100%"});
                this.sList.eq(this.current).animate({left:"-100%"}, 1000, "linear");
                this.sList.eq(idx).animate({left:"0%"}, 1000, ()=>{
                    this.sliding= false;
                });
            }else { //왼쪽으로 이동
                this.sList.eq(idx).css({"left":"-100%"});
                this.sList.eq(this.current).animate({"left":"100%"}, 1000, "linear");
                this.sList.eq(idx).animate({left:"0%"}, 1000, ()=>{
                    this.sliding= false;
                });
            }
            this.current = idx;
        });
    }

    slide(idx){

    }
}