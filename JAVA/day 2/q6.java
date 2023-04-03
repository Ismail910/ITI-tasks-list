  
class splitIp {

    // Main driver method
    public static void main(String args[])
    {
        // Custom input string
        String str = "192.168.1.1";
        String[] splitStr = str.split("\\.");
        for(int i=0;i<splitStr.length;i++){
        	System.out.println(splitStr[i]);    	
        }
    }
}
