public class counter {
	   public static void main(String[] args) {
       String s = "Hello distinguished gentlemen hello distinguished ladies hello to all of you";
	   System.out.println(s);
	   String [] subString = s.split(" ");
	   
	    System.out.println(subString[0]);
	    
	    int count=0;
	    
	   for(int i=0;i<subString.length;i++){
		   if(subString[i].equals("hello") ){
			   count++;
		   }
	   }
	   
	   System.out.println( count );
   }
}
