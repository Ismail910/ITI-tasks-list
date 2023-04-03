class Geometricobject 
{
    private color: string
    private filled: boolean
    private date: Date
    
    constructor(color:string = "any",filled:boolean,date:Date)
    {
        this.color=color;
        this.filled=filled;
        this.date=date;
    }
    Geometricobject(color:string,filled:boolean)
    {
        this.color = color;
        this.filled = filled;
    }
    setcolor(color:string)
    {
        this.color = color;
    }
    getcolor()
    {
        return this.color;
    }
    setfilled(filled:boolean)
    {
        this.filled = filled;
    }
    isfilled():boolean
    {
        return this.filled;
    }
    getdate():Date
    {
        return this.date;
    }
    tostring():string
    {
        return this.color+" "+this.filled+" "+this.date;
    }
}

class Circle extends Geometricobject
{
    private radius:number
    constructor(radius:number,color:string,filled:boolean,date:Date)
    {
        super(color,filled,date);
        this.radius=radius;
    }
  
    getradius():number
    {
        return this.radius;
    }
    setradius(radius:number)
    {
        this.radius=radius;
    }
    getarea():number
    {
        return Math.PI*Math.pow(this.radius,2);
    }
    getperimeter():number
    {
      return 2*Math.PI*this.radius;
    }
    getdiameter():number
    {
        return 2*this.radius;
    }
    print():void
    {
        console.log("circle")
    }
}
class Rectangle extends Geometricobject
{
    private width:number
    private height:number
    constructor(width:number,height:number,color:string,filled:boolean,date:Date)
    {
        super(color,filled,date);
        this.width=width;
        this.height=height;
    }
    getwidth():number
    {
        return this.width;
    }
    setwidth(width:number)
    {
        this.width=width;
    }
    getheight():number
    {
        return this.height;
    }
    setheight(height:number)
    {
        this.height=height;
    }
    getarea():number
    {
       return this.width*this.height;
    }
    getperimeter():number
    {
      return 2*this.width*this.height;
    }
    print():void
    {
        console.log("Rectangle")
    }
}