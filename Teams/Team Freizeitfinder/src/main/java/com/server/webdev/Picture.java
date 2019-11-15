package com.server.webdev;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
public class Picture {

    @Id
    @GeneratedValue(strategy = GenerationType.SEQUENCE)
    private long ID;

    private String data;
    private String data_format;

    public String getData() {
        return data;
    }

    public void setData(String data) {
        this.data = data;
    }

    public long getID() {
        return ID;
    }

    public void setID(long ID) {
        this.ID = ID;
    }

    public String getData_format() {
        return data_format;
    }

    public void setData_format(String data_format) {
        this.data_format = data_format;
    }
}
