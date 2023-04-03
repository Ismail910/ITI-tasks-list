

interface stringlettel
{
	boolean isletter(String s1);
}

class q4{
	public static void  main(String []args){
	
		String letterstring="osdd333d";
		
		stringlettel letter = (s1) -> {
			
			for (int i=0;i<s1.length();i++){
				if(!Character.isLetter(s1.charAt(i))) return false;
			}
			return true;
		};
		System.out.println(letter.isletter(letterstring));
		
		
	}
	
}
