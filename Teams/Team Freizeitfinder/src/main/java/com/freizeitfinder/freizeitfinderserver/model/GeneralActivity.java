package com.freizeitfinder.freizeitfinderserver.model;

import javax.persistence.*;
import java.sql.Time;
import java.util.HashSet;
import java.util.Set;

@Entity
@Table(name = "general_activity")
public class GeneralActivity extends BaseModel {

    //Variables
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id;

    @ManyToMany(fetch = FetchType.LAZY,
            cascade = {
                    CascadeType.PERSIST,
                    CascadeType.MERGE
            })
    @JoinTable(name = "category_to_activity",
            joinColumns = {@JoinColumn(name = "general_activity_id")},
            inverseJoinColumns = {@JoinColumn(name = "category_id")})
    private Set<Category> categories = new HashSet<>();

    @Column(name = "name",
            columnDefinition = "varchar(50)",
            nullable = false)
    private String name;

    @Column(name = "activity_start",
            columnDefinition = "time",
            nullable = false)
    private Time activityStart;

    @Column(name = "activity_end",
            columnDefinition = "time",
            nullable = false)
    private Time activityEnd;

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

    //getter/setter
    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public Set<Category> getCategories() {
        return categories;
    }

    public void setCategories(Set<Category> categories) {
        this.categories = categories;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Time getActivityStart() {
        return activityStart;
    }

    public void setActivityStart(Time activityStart) {
        this.activityStart = activityStart;
    }

    public Time getActivityEnd() {
        return activityEnd;
    }

    public void setActivityEnd(Time activityEnd) {
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
}
