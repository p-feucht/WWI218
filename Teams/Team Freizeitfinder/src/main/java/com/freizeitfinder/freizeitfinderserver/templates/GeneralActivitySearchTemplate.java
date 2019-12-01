package com.freizeitfinder.freizeitfinderserver.templates;

public class GeneralActivitySearchTemplate {
    private String searchString;
    private int outside;
    private int inside;
    private int societal;
    private int sport;
    private int alcohol;
    private int games;
    private String place;

    public String getSearchString() {
        return searchString;
    }

    public void setSearchString(String searchString) {
        this.searchString = searchString;
    }

    public int isOutside() {
        return outside;
    }

    public void setOutside(int outside) {
        this.outside = outside;
    }

    public int isInside() {
        return inside;
    }

    public void setInside(int inside) {
        this.inside = inside;
    }

    public int isSocietal() {
        return societal;
    }

    public void setSocietal(int societal) {
        this.societal = societal;
    }

    public int isSport() {
        return sport;
    }

    public void setSport(int sport) {
        this.sport = sport;
    }

    public int isAlcohol() {
        return alcohol;
    }

    public void setAlcohol(int alcohol) {
        this.alcohol = alcohol;
    }

    public int isGames() {
        return games;
    }

    public void setGames(int games) {
        this.games = games;
    }

    public String getPlace() {
        return place;
    }

    public void setPlace(String place) {
        this.place = place;
    }
}
