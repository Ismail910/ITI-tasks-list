  
class split_subString {

    // Main driver method
    public static void main(String args[])
    {
        // Custom input string
        String str = "Given a sentence and a word, your task is that to count the number of occurrences of the given word in the string";
        int start=0,end,counter=0;
        for(int i=0;i<str.length();i++){
        	if( str.charAt(i) == ' '){
        		end=i;
        		if(str.substring(start,end).equals("of")) counter++;
        		start=i+1;
        	}
        	
        }
        System.out.println(counter);
    }
}
