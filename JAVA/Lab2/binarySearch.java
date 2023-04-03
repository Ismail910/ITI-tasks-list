import java.util.Random;
import java.util.Arrays;
public class Example {


static int binarySearch(int arr[], int l, int r, int x)
    {
        if (r>=l)
        {
            int mid = l + (r - l)/2;
  
            if (arr[mid] == x)
               return mid;
  
           
            if (arr[mid] > x)
               return binarySearch(arr, l, mid-1, x);
  
            
            return binarySearch(arr, mid+1, r, x);
        }
  
        
        return -1;
    }

   
   public static void main(String[] args) {
    
      Random rd = new Random(); // creating Random object
      int[] arr = new int[1000];
      for (int i = 0; i < arr.length; i++) {
         arr[i] = rd.nextInt(); // storing random integers in an array
        
      }
      
      Arrays.sort(arr);
      
      
      long start = System.nanoTime(); //System.nanoTime();
      	
	 int n = arr.length;
        int x = arr[10];
	int index = binarySearch(arr,0,n-1,x);
	long end = System.nanoTime();
	 long elapsedTime = end - start;
     System.out.println(elapsedTime);
     
      
      

   }
}
