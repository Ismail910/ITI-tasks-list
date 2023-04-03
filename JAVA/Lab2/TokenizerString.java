import java.util.StringTokenizer;    
public class SplitS {
	   public static void main(String[] args) {
	   StringTokenizer st = new StringTokenizer("Hello distinguished gentlemen hello distinguished ladies hello to all of you", "hello");   
     while (st.hasMoreTokens())   
     {    
         System.out.println(st.nextToken());    
     }    
   }
}
