

interface stringBetter
{
	boolean isBetter(String s1,String  s2);
}

class q3{
	public static void  main(String []args){
	
		String s1="omar", s2="adelll";
		
		String longer = betterString(s1, s2, (spredicate1, spredicate12) -> spredicate1.length() > spredicate12.length());
		System.out.println(longer);
		
		String first = betterString(s1, s2, (spredicate1, spredicate12) -> true);
		System.out.println(first);
	}
	
	public static String betterString(String s1, String s2, stringBetter predicate) {
        if (predicate.isBetter(s1, s2)) {
            return s1;
        } else {
            return s2;
        }
    }
}



