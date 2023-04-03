import java.awt.*;
import javax.swing.*;
import java.util.Date;

 class MyPanel extends JPanel implements Runnable{
	public MyPanel(){
		this.setBackground(Color.cyan);
		new Thread(this).start();
	}

	public void paintComponent(Graphics g){
		super.paintComponent(g);
		g.drawString(new Date().toString(),100,100);
	}

	public void run(){
		try{
			while(true){
			this.repaint();
			Thread.sleep(1000);
		}
			
			
		}catch(InterruptedException e){
				e.printStackTrace();
			}
	}
}

class q1{
	public static void main(String []args){
		JFrame f = new JFrame();
		f.setTitle("GUI");
		MyPanel mp = new MyPanel();
		f.setContentPane(mp);
		f.setSize(400,200);
		f.setVisible(true);
	}
}
