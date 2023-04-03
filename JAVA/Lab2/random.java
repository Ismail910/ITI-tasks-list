import java.util.Random;
public class Example {

      static int max(int [] array) {
      int max = 0;
      for(int i=0; i<array.length; i++ ) {
         if(array[i]>max) {
            max = array[i];
         }
      }
      return max;
   }
   static int min(int [] array) {
      int min = array[0];
     
      for(int i=0; i<array.length; i++ ) {
         if(array[i]<min) {
            min = array[i];
         }
      }
      return min;
   }


   public static void main(String[] args) {
    
      Random rd = new Random(); // creating Random object
      int[] arr = new int[1000];
      for (int i = 0; i < arr.length; i++) {
         arr[i] = rd.nextInt(); // storing random integers in an array
        
      }
      long start = System.currentTimeMillis(); //System.nanoTime();
      int max= max(arr);
      int min = min(arr);
      

      System.out.println(max);
      System.out.println(min);
      
      	long end = System.currentTimeMillis();//System.nanoTime();
	 long elapsedTime = end - start;
     System.out.println(elapsedTime);
      
      

   }
}
