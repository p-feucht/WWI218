package com.freizeitfinder.freizeitfinderserver.templates;

import com.freizeitfinder.freizeitfinderserver.model.GeneralActivity;

import java.util.HashSet;
import java.util.Set;

public class GeneralActivityTemplate {
    //Variables

    private long id;

    //private Set<CategoryTemplate> categories = new HashSet<>();

    private String name;

    private String activityStart;

    private String activityEnd;

    private String description;

    private String openingHoursStart;

    private String openingHoursEnd;

    private String street;

    private int postcode;

    private String cityName;

    public GeneralActivity convertToGeneralActivity() {
        return null;
    }
}
