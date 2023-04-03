import java.util.Random; 
import java.util.Arrays;
class BinarySearch {
    // Returns index of x if it is present in arr[l..
    // r], else return -1
    int binarySearch(int arr[], int l, int r, int x)
    {
        if (r >= l) {
            int mid = l + (r - l) / 2;
 
            // If the element is present at the
            // middle itself
            if (arr[mid] == x)
                return mid;
 
            // If element is smaller than mid, then
            // it can only be present in left subarray
            if (arr[mid] > x)
                return binarySearch(arr, l, mid - 1, x);
 
            // Else the element can only be present
            // in right subarray
            return binarySearch(arr, mid + 1, r, x);
        }
 
        // We reach here when element is not present
        // in array
        return -1;
    }
 
    // Driver method to test above
    public static void main(String args[])
    {
        	BinarySearch ob = new BinarySearch();
       	int minRandom=Integer.MAX_VALUE,maxRandom=Integer.MIN_VALUE;
		int [] arr=new int [1000];
		 long nano_startTime = System.nanoTime();
		for(int i=0;i<1000;i++){
			Random random = new Random();   
			arr[i]=random.nextInt(10000);   
			if( arr[i] <= minRandom ){
				minRandom = arr[i];
			}
			if( arr[i] >= maxRandom ){
				maxRandom = arr[i];
			}
		}
		 
		System.out.println("min random number"+minRandom);
		System.out.println("max random number"+maxRandom);
	Arrays.sort(arr);
        int n = arr.length;
        int x = maxRandom;
        int result = ob.binarySearch(arr, 0, n - 1, x);
        if (result == -1)
            System.out.println("Element not present");
        else
            System.out.println("Element found at index "+ result);
            
            long nano_endTime = System.nanoTime();
            System.out.println("Time taken in nano seconds: "
                           + (nano_endTime - nano_startTime));
    }
}
