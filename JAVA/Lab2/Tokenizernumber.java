public class splitIP{
	   public static void main(String[] args) {
       String s = "192.168.1.1";
	   System.out.println(s);
	   String [] subString = s.split("\\.");
	   for(int i=0;i<subString.length;i++){
		   System.out.println(subString[i]);
	   }
   }
}
