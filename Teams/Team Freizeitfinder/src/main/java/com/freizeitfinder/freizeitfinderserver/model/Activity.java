package com.freizeitfinder.freizeitfinderserver.model;

import com.fasterxml.jackson.annotation.JsonIgnore;
import org.hibernate.annotations.OnDelete;
import org.hibernate.annotations.OnDeleteAction;

import javax.persistence.*;
import java.io.Serializable;
import java.util.Date;

@Entity
@Table(name = "activity")
public class Activity extends BaseModel implements Serializable {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id;

    @ManyToOne(fetch = FetchType.LAZY,
            optional = false)
    @JoinColumn(name = "activity_id", nullable = false)
    @OnDelete(action = OnDeleteAction.CASCADE)
    @JsonIgnore
    private GeneralActivity activity;

    @Lob
    @Column(name = "description",
            columnDefinition = "longtext")
    private String description;

    @Column(name = "start_time",
            columnDefinition = "timestamp",
            nullable = false)
    @Temporal(TemporalType.TIMESTAMP)
    private Date startTime;

    @Column(name = "end_time",
            columnDefinition = "timestamp",
            nullable = false)
    @Temporal(TemporalType.TIMESTAMP)
    private Date endTime;

    @Column(name = "duration",
            columnDefinition = "decimal(2)",
            nullable = false)
    private int duration;

    @Column(name = "attendees_total",
            columnDefinition = "decimal(3)")
    private int attendeesTotal;

    @Column(name = "attendees_right_now",
            columnDefinition = "decimal(3)",
            nullable = false)
    private int attendeesRightNow;

    @Column(name = "tel_number",
            columnDefinition = "bigint(20)")
    private long telNumber;

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public GeneralActivity getActivity() {
        return activity;
    }

    public void setActivity(GeneralActivity activity) {
        this.activity = activity;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Date getStartTime() {
        return startTime;
    }

    public void setStartTime(Date startTime) {
        this.startTime = startTime;
    }

    public Date getEndTime() {
        return endTime;
    }

    public void setEndTime(Date endTime) {
        this.endTime = endTime;
    }

    public int getDuration() {
        return duration;
    }

    public void setDuration(int duration) {
        this.duration = duration;
    }

    public int getAttendeesTotal() {
        return attendeesTotal;
    }

    public void setAttendeesTotal(int attendeesTotal) {
        this.attendeesTotal = attendeesTotal;
    }

    public int getAttendeesRightNow() {
        return attendeesRightNow;
    }

    public void setAttendeesRightNow(int attendeesRightNow) {
        this.attendeesRightNow = attendeesRightNow;
    }

    public long getTelNumber() {
        return telNumber;
    }

    public void setTelNumber(long telNumber) {
        this.telNumber = telNumber;
    }

    public String geteMailAdress() {
        return eMailAdress;
    }

    public void seteMailAdress(String eMailAdress) {
        this.eMailAdress = eMailAdress;
    }

    @Column(name = "e_mail",
            columnDefinition = "varchar(50)")
    private String eMailAdress;
}