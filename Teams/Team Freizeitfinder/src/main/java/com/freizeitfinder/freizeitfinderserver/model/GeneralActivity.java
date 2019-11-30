package com.freizeitfinder.freizeitfinderserver.model;

import javax.persistence.*;
import java.sql.Time;

@Entity
@Table(name = "general_activity")
public class GeneralActivity extends BaseModel {

    //Variables
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id;

    @Column(name = "outside",
    columnDefinition = "int(1)")
    private int outside;

    @Column(name = "inside",
            columnDefinition = "int(1)")
    private int inside;

    @Column(name = "alcohol",
            columnDefinition = "int(1)")
    private int alcohol;

    @Column(name = "with_others",
            columnDefinition = "int(1)")
    private int societal;

    @Column(name = "sport",
            columnDefinition = "int(1)")
    private int sport;

    @Column(name = "game",
            columnDefinition = "int(1)")
    private int game;

    @Column(name = "name",
            columnDefinition = "varchar(50)",
            nullable = false)
    private String name;

    @Column(name = "activity_start",
            columnDefinition = "time",
            nullable = false)
    private String activityStart;

    @Column(name = "activity_end",
            columnDefinition = "time",
            nullable = false)
    private String activityEnd;

    @Lob
    @Column(name = "description",
            columnDefinition = "longtext")
    private String description;

    @Column(name = "opening_hours_start",
            columnDefinition = "time")
    private Time openingHoursStart;

    @Column(name = "opening_hours_end",
            columnDefinition = "time")
    private Time openingHoursEnd;

    @Column(name = "street",
            columnDefinition = "varchar(50)",
            nullable = false)
    private String street;

    @Column(name = "postcode",
            columnDefinition = "bigint(6)",
            nullable = false)
    private int postcode;

    @Column(name = "city_name",
            nullable = false)
    private String cityName;

    public GeneralActivity() {
    }

    //getter/setter
    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }


    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getActivityStart() {
        return activityStart;
    }

    public void setActivityStart(String activityStart) {
        this.activityStart = activityStart;
    }

    public String getActivityEnd() {
        return activityEnd;
    }

    public void setActivityEnd(String activityEnd) {
        this.activityEnd = activityEnd;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Time getOpeningHoursStart() {
        return openingHoursStart;
    }

    public void setOpeningHoursStart(Time openingHoursStart) {
        this.openingHoursStart = openingHoursStart;
    }

    public Time getOpeningHoursEnd() {
        return openingHoursEnd;
    }

    public void setOpeningHoursEnd(Time openingHoursEnd) {
        this.openingHoursEnd = openingHoursEnd;
    }

    public String getStreet() {
        return street;
    }

    public void setStreet(String street) {
        this.street = street;
    }

    public String getCityName() {
        return cityName;
    }

    public void setCityName(String cityName) {
        this.cityName = cityName;
    }

    public int getPostcode() {
        return postcode;
    }

    public void setPostcode(int postcode) {
        this.postcode = postcode;
    }

    public int getGame() {
        return game;
    }

    public void setGame(int game) {
        this.game = game;
    }

    public int getSport() {
        return sport;
    }

    public void setSport(int sport) {
        this.sport = sport;
    }

    public int getSocietal() {
        return societal;
    }

    public void setSocietal(int societal) {
        this.societal = societal;
    }

    public int getAlcohol() {
        return alcohol;
    }

    public void setAlcohol(int alcohol) {
        this.alcohol = alcohol;
    }

    public int getInside() {
        return inside;
    }

    public void setInside(int inside) {
        this.inside = inside;
    }

    public int getOutside() {
        return outside;
    }

    public void setOutside(int outside) {
        this.outside = outside;
    }
}