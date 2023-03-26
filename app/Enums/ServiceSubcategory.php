<?php

namespace App\Enums;

enum ServiceSubcategory: string
{
    // Beauty
    case HAIRCUTS = 'haircuts';
    case STYLING = 'styling';
    case COLORING = 'coloring';
    case WAXING = 'waxing';
    case MAKEUP = 'makeup';
    case MANICURES_PEDICURES = 'manicures_pedicures';

    // Fitness
    case PERSONAL_TRAINING = 'personal_training';
    case YOGA = 'yoga';
    case PILATES = 'pilates';
    case CROSSFIT = 'crossfit';
    case DANCE_CLASSES = 'dance_classes';

    // Wellness
    case MASSAGE = 'massage';
    case ACUPUNCTURE = 'acupuncture';
    case NUTRITION = 'nutrition';
    case SPA = 'spa';
    case SAUNA = 'sauna';

    // Medical
    case GENERAL_PRACTITIONER = 'general_practitioner';
    case DENTIST = 'dentist';
    case DERMATOLOGIST = 'dermatologist';
    case PSYCHOLOGIST = 'psychologist';
    case PHYSIOTHERAPIST = 'physiotherapist';

    // Home
    case CLEANING = 'cleaning';
    case HANDYMAN = 'handyman';
    case GARDENING = 'gardening';
    case PEST_CONTROL = 'pest_control';
    case PLUMBING = 'plumbing';

    // Event
    case PHOTOGRAPHY = 'photography';
    case VIDEOGRAPHY = 'videography';
    case DJ = 'dj';
    case EVENT_PLANNING = 'event_planning';
    case CATERING = 'catering';

    // Education
    case TUTORING = 'tutoring';
    case LANGUAGE_CLASSES = 'language_classes';
    case MUSIC_CLASSES = 'music_classes';
    case ART_CLASSES = 'art_classes';
    case COOKING_CLASSES = 'cooking_classes';

    // Automotive
    case CAR_WASH = 'car_wash';
    case AUTO_MECHANIC = 'auto_mechanic';
    case AUTO_BODY_REPAIR = 'auto_body_repair';
    case CAR_RENTAL = 'car_rental';
    case DRIVING_LESSONS = 'driving_lessons';

    // Business
    case ACCOUNTING = 'accounting';
    case LEGAL_SERVICES = 'legal_services';
    case MARKETING = 'marketing';
    case IT_SERVICES = 'it_services';
    case CONSULTING = 'consulting';

    // Travel
    case HOTEL = 'hotel';
    case AIR_TRAVEL = 'air_travel';
    case CAR_RENTAL_TRAVEL = 'car_rental_travel';
    case CRUISES = 'cruises';
    case TOURS = 'tours';


}

