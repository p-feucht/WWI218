package com.freizeitfinder.freizeitfinderserver.model;

import javax.persistence.*;

@Entity
@Table(name = "post_code_district")
public class PostCodeDistrict extends BaseModel {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long postcode;

    @Column(name = "postcode_district_name",
            columnDefinition = "varchar(50)",
            nullable = false)
    private String name;

    @ManyToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "post_id", nullable = false)
    GeneralActivity adjGeneralActivity = new GeneralActivity();

    public long getPostcode() {
        return postcode;
    }

    public void setPostcode(long postcode) {
        this.postcode = postcode;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public GeneralActivity getAdjGeneralActivity() {
        return adjGeneralActivity;
    }

    public void setAdjGeneralActivity(GeneralActivity adjGeneralActivity) {
        this.adjGeneralActivity = adjGeneralActivity;
    }
}
