
import java.util.*;

abstract class Shape{
	public abstract void draw();
}

class Rectangle extends Shape{
	 public void draw(){
      		System.out.println("iam a rectangle");
      }
}

class Circle extends Shape{
      public void draw(){
      		System.out.println("iam a circle");
      }	
}

class Notextend{
      public void draw(){
      		System.out.println("iam a Notextend");
      }	
}
class q1{
	
 	public static void main(String []args){
 		List <Rectangle>listRectangles =new ArrayList();
 		listRectangles.add(new Rectangle());
 		listRectangles.add(new Rectangle());
 		listRectangles.add(new Rectangle());
 		drawPics(listRectangles);
 		
 		List <Circle>listCircles =new ArrayList();
 		listCircles.add(new Circle());
 		listCircles.add(new Circle());
 		listCircles.add(new Circle());
 		drawPics(listCircles);
 		
 		/*List <Notextend>listNotextends =new ArrayList();
 		listNotextends.add(new Notextend());
 		listNotextends.add(new Notextend());
 		listNotextends.add(new Notextend());
 		drawPics(listNotextends);*/
 	}

	
 	public static void drawPics(List<? extends Shape> lists){
		for(Shape s:lists){
			s.draw();
		}
		}
}
