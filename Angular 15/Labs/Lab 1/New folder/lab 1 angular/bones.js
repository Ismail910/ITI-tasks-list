"use strict";
class Geometricobject {
    constructor(color, filled, date) {
        this.color = color;
        this.filled = filled;
        this.date = date;
    }
    Geometricobject(color, filled) {
        this.color = color;
        this.filled = filled;
    }
    setcolor(color) {
        this.color = color;
    }
    getcolor() {
        return this.color;
    }
    setfilled(filled) {
        this.filled = filled;
    }
    isfilled() {
        return this.filled;
    }
    getdate() {
        return this.date;
    }
    tostring() {
        return this.color + " " + this.filled + " " + this.date;
    }
}
class Circle extends Geometricobject {
    constructor(radius, color, filled, date) {
        super(color, filled, date);
        this.radius = radius;
    }
    getradius() {
        return this.radius;
    }
    setradius(radius) {
        this.radius = radius;
    }
    getarea() {
        return Math.PI * Math.pow(this.radius, 2);
    }
    getperimeter() {
        return 2 * Math.PI * this.radius;
    }
    getdiameter() {
        return 2 * this.radius;
    }
    print() {
        console.log("circle");
    }
}
class Rectangle extends Geometricobject {
    constructor(width, height, color, filled, date) {
        super(color, filled, date);
        this.width = width;
        this.height = height;
    }
    getwidth() {
        return this.width;
    }
    setwidth(width) {
        this.width = width;
    }
    getheight() {
        return this.height;
    }
    setheight(height) {
        this.height = height;
    }
    getarea() {
        return this.width * this.height;
    }
    getperimeter() {
        return 2 * this.width * this.height;
    }
    print() {
        console.log("Rectangle");
    }
}
