package com.freizeitfinder.freizeitfinderserver;

import java.util.Date;
import java.util.Set;

public class Helper {
    public static Set<String> extractCategories(String categories) {
        return null;

    }

    public static Date resolveDate(String startTime) {
        if("sysdate".equalsIgnoreCase(startTime)){
            return new Date();
        }
        return null;
    }
}
