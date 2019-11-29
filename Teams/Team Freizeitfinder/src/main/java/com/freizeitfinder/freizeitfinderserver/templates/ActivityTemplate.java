package com.freizeitfinder.freizeitfinderserver.templates;

import com.freizeitfinder.freizeitfinderserver.Helper;
import com.freizeitfinder.freizeitfinderserver.model.Activity;

import java.util.Date;

public class ActivityTemplate {

    private long id;

    private GeneralActivityTemplate generalActivity;

    private String description;

    private String endTime;

    private int duration;

    private int attendeesTotal;

    private int attendeesRightNow;

    private long telNumber;

    private String eMailAdress;

    private String startTime;

    public Activity convertToActivity() {
        Activity a = new Activity();
        a.setAttendeesRightNow(attendeesRightNow);
        a.setAttendeesTotal(attendeesTotal);
        a.setDescription(description);
        a.setDuration(duration);
        a.seteMailAdress(eMailAdress);
        a.setTelNumber(telNumber);
        //a.setEndTime(Helper.resolveDate(endTime));
        //a.setStartTime(Helper.resolveDate(startTime));
        return a;
    }
}
