  
class split {

    // Main driver method
    public static void main(String args[])
    {
        // Custom input string
        String str = "Given a sentence and a word, your task is that to count the number of occurrences of the given word in the string";
        String[] splitStr = str.split(" ");
        int counter = 0;
        String testWord = "of";
        for(int i=0;i<splitStr.length;i++){
        	if( splitStr[i].equals("of")){
        		counter++;
        	}
        	System.out.println(splitStr[i]);
        }
        System.out.println(counter);
    }
}
