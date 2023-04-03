import java.awt.*;
import javax.swing.*;
import java.util.Date;
 class MyPanel extends JPanel implements Runnable{
 	public int x;
	public MyPanel(){
		this.setBackground(Color.cyan);
		x=100;
		
			new Thread(this).start();
		
	}

	public void paintComponent(Graphics g){
		super.paintComponent(g);
		g.drawString("Hello",x,100);
	}

	public void run(){
		try{
			while(true){
			if(x >= this.getWidth()) x=0;
			else x+=10;
			this.repaint();
			Thread.sleep(1000);
		}
			
		}catch(InterruptedException e){
				e.printStackTrace();
			}
	}
}

class q2{
	public static void main(String []args){
		JFrame f = new JFrame();
		
		f.setTitle("GUI");
		MyPanel mp = new MyPanel();
		f.setContentPane(mp);
		f.setSize(400,200);
		f.setVisible(true);
	}
}
