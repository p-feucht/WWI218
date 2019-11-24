package com.freizeitfinder.freizeitfinderserver.model;

import javax.persistence.*;
import java.util.HashSet;
import java.util.Set;

@Entity
@Table(name = "category")
public class Category extends BaseModel {

    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private int id;

    @ManyToMany(fetch = FetchType.LAZY,
            cascade = {
                    CascadeType.PERSIST,
                    CascadeType.MERGE
            },
            mappedBy = "categories")
    private Set<GeneralActivity> generalActivities = new HashSet<>();

    @Column(name = "name_category",
            columnDefinition = "varchar(50)",
            nullable = false)
    private String name_category;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Set<GeneralActivity> getGeneralActivities() {
        return generalActivities;
    }

    public void setGeneralActivities(Set<GeneralActivity> generalActivities) {
        this.generalActivities = generalActivities;
    }

    public String getName_category() {
        return name_category;
    }

    public void setName_category(String name_category) {
        this.name_category = name_category;
    }
}
