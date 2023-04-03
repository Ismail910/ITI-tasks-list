import java.awt.*;
import javax.swing.*;
import java.util.Date;
 class MyPanel extends JPanel implements Runnable{
 	public int x,y,deltax,deltay;
	public MyPanel(){
		this.setBackground(Color.cyan);
		  x=100;
		  y=50;
		  deltax=100;
		  deltay=50;
		
			new Thread(this).start();
		
	}

	public void paintComponent(Graphics g){
		super.paintComponent(g);
		g.fillOval(x,y,20,20);
	}

	public void run(){
		try{
			while(true){
			
			x=x+deltax;
			y+=deltay;
			if(x + 5 >= this.getWidth()) deltax=-deltax;
			if(y + 5 <= this.getHeight()) deltay=-deltay;
			if(x ==0) deltax=-deltax;
			if(y ==0) deltay=-deltay;
			
			this.repaint();
			Thread.sleep(1000);
		}
			
		}catch(InterruptedException e){
				e.printStackTrace();
			}
	}
}

class q3{
	public static void main(String []args){
		JFrame f = new JFrame();
		
		f.setTitle("GUI");
		MyPanel mp = new MyPanel();
		f.setContentPane(mp);
		f.setSize(400,200);
		f.setVisible(true);
	}
}
